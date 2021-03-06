@extends('Admin.AdminPublic.public')
@section('main')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>型号模拟</title>
    <script type="text/javascript" src="/js/layer.js"></script>
    <link rel="stylesheet" href="/css/layer.css" />
    <style>      
      * {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
      }
      
      .sku_btns a {
        background: #1EACEA;
        color: #FFFFFF;
        padding: 5px 10px;
      }
      
      input {
        outline: none;
      }
      
      span {
        display: inline-block;
      }
      
      .clearfix:after {
        content: "";
        display: block;
        height: 0;
        clear: both;
      }
      /****商品规格***/
      
      .sku_guige {
        margin-top: 20px;
        display: none;
      }
      
      .sku_modellist_title {
        font-size: 14px;
        margin-top: 20px;
      }
      /**********表格sku************/
      
      .sku_table {
        margin-top: 15px;
        border: 1px solid #dfdfdf;
        text-align: center;
        min-height: 320px;
        display: none;
      }
      
      .sku_table input {
        width: 100px;
      }
      
      .sku_tableHead {
        background: #F5F5F5;
        height: 40px;
        border-bottom: 1px solid #dfdfdf;
      }
      
      .sku_t_title {
        float: left;
        width: 120px;
        padding: 5px 0;
        margin-top: 7px;
        border-right: 1px solid #dfdfdf;
      }
      
      .sku_cell {
        border-bottom: 1px solid #DFDFDF;
      }
      /*****弹窗中间部分内容*****/
      
      .sku_content {
        padding: 25px 20px;
        display: none;
      }
      
      .sku_add {
        margin-top: 20px;
        height: 36px;
        font-size: 14px;
      }
      
      .sku_list {
        font-size: 0;
        margin-top: 15px;
      }
      
      .sku_item {
        margin-top: 20px;
      }
      
      .sku_list a {
        padding: 7px 20px;
        border: 1px solid #d7d7d7;
        border-radius: 5px;
      }
      
      .sku_list span {
        position: relative;
        font-size: 16px;
        margin-right: 20px;
      }
      
      .sku_list .itemactive {
        background: #2AC845;
        color: #fff;
      }
      
      .sku_list .sku_item_close {
        display: none;
        position: absolute;
        right: -10px;
        top: -15px;
        height: 20px;
        width: 20px;
        background: rgba(0, 0, 0, .5);
        color: #FFF;
        border-radius: 50%;
        text-align: center;
        line-height: 20px;
        font-style: normal;
        cursor: pointer;
      }
      
      .sku_add input {
        height: 34px;
        padding: 5px;
        width: 210px;
        border: 1px solid #dfdfdf;
        float: left;
        border-right: none;
      }
      
      .sku_add a {
        background: #F5F5F5;
        height: 34px;
        text-align: center;
        display: inline-block;
        min-width: 80px;
        padding-top: 10px;
        border: 1px solid #DFDFDF;
      }
      
      .layui-layer-btn .layui-layer-btn0 {
        background: #f1f1f1;
        border-color: #DEDEDE;
        color: #000;
      }
      
      .layui-layer-btn .layui-layer-btn1 {
        background: #4898d5;
        border-color: #4898d5;
        color: #fff;
      }
    </style>
  </head>

  <body>
    <div class="sku_btns">
      <a id="add_multi_sku" class="item_add_sku_btn">添加多级型号</a>
    </div>
    <div class="sku_guige">
      <div>商品规格</div>
      <!---下列存放动态生成的商品规格：颜色，尺码等-->
      <div class="sku_modellist">
      </div>
    </div>
    <!---此处为动态生成的表格内容-->
    <div class="sku_table">
      <!--表格头部-->
      <div class="sku_tableHead clearfix">
      </div>
      <!---表格内信息--->
      <div class="sku_tablecell"></div>
    </div>
    <!---弹窗中间内容-->
    <div class="sku_content">
      <div class="sku_list sku_content_sku_list">
        <span class="sku_item">
          <a data-id="d1">颜色</a>
        </span>
        <span class="sku_item">
          <a data-id="d2">尺码</a>
        </span>
      </div>
      <div class="sku_add"><input type="text" placeholder="请输入商品型号" class="sku_input">
        <a id="sku_addbtn">新建</a>
      </div>
    </div>
    <script>
      var size = ['XXXL', "XXL", 'L', "M", "S"];
      var color = ["红色", "黄色", "橘色", "黑色", "白色"];
      var sizes = {
        "颜色": color,
        "尺码": size
      }
      var tabledata = []
      var selectedArr = {};
      var hasdid = {};
      var hastext = [];
      /***
       * Skumodel 为生成规格类
       * title为规格名字  string  例：尺码
       * times将要生成的规格项目  Array  例如：尺码：xxl,xl,m,s
       * dataid为产生型号的标识最外层元素上的id   string
       * **/
      var Skumodel = function(title, items, dataid) {
        //最外层div+标题栏
        this.title = title || "";
        this.items = items || [];
        this.container = $('<div class="sku_container" id="' + dataid + '"><div class="sku_modellist_title">' + this.title + '：</div></div>');
        //模型列表
        this.skumodels = $('<div class="sku_models"></div>');
        this.skumlist = $('<div class="sku_list"></div>')
        this.skuinputcon = $('<div class="sku_add"></div>');
        //输入框
        this.skuinput = $('<input type="text" placeholder="请输入型号属性">');
        //新建按钮
        this.addbtn = $('<a>新建</a>');
        this.init(this.items)
      }
      Skumodel.prototype = {
        //初始化显示组件
        init: function(items) {
          var html = ""
          for(var i = 0; i < items.length; i++) {
            html += '<span class="sku_item"><a data-id="' + getIndex() + '">' + items[i] + '</a><i class="sku_item_close">×</i></span>';
          }
          //获取所有生成按钮
          this.skumlist.append($(html))
          this.skumodels.append(this.skumlist)
          this.container.append(this.skumodels)
          this.skuinputcon.append(this.skuinput)
          this.skuinputcon.append(this.addbtn)
          this.skumodels.append(this.skuinputcon)
          $(".sku_modellist").append(this.container);
          this.bindEvent()
        },
        bindEvent: function() {
          var self = this;
          //点击新建按钮产生
          this.addbtn.click(function() {
            self.createItem();
          });
          this.activeItem();
          //点击删除按钮删除
          this.deleteItem();
          //控制删除符号
          this.toggleCloseEle();
        },
        //创建sku子元素
        createItem: function() {
          var value=$.trim(this.skuinput.val())
          if(value.length <= 0) {
            layer.alert("请输入内容");
            return
          }
          if(sizes[this.title].indexOf(value)>=0){
            layer.msg("请勿重复创建")
            return;
          }
          sizes[this.title].push(this.skuinput.val())
          this.skumlist.append($('<span class="sku_item"><a data-id="' + getIndex() + '">' + value + '</a><i class="sku_item_close">×</i></span>'))
          this.skuinput.val("")
        },
        //子元素是否选中事件
        activeItem: function() {
          this.skumlist.on("click", "a", function() {
            $(this).toggleClass("itemactive");
            tableContent()
          });
        },
        //监听删除元素
        deleteItem: function() {
          var self=this;
          this.skumlist.on("click", ".sku_item_close", function() {
            $(this).parent().remove();
            var text = $(this).parent().find("a").text();
            var textarr = sizes[self.title];
            textarr.splice(textarr.indexOf(text), 1)
            tableContent();
          });
        },
        //控制删除符号的显示
        toggleCloseEle: function() {
          //显示删除符号
          this.skumlist.on("mouseover", ".sku_item", function() {
            $(this).find(".sku_item_close").css({
              display: "inline-block"
            })
          });
          //显示删除符号
          this.skumlist.on("mouseout", ".sku_item", function() {
            $(this).find(".sku_item_close").css({
              display: "none"
            })
          });
        }
      };

      /****
       * SkuCell动态产生表格内容类
       * cellist为表格内部元素    Array   如["红色","xxl"]
       * dataid为行表格id 产生元素的唯一标识   string
       * ***/
      var SkuCell = function(celllist, dataid) {
        //每行表格的父元素
        this.cellcon = $('<div id="' + dataid + '" class="sku_cell clearfix"></div>');
        //价格输入
        this.moneyInput = $('<div class="sku_t_title"><input /></div>');
        //库存输入
        this.leftInput = $('<div class="sku_t_title"><input /></div>');
        this.init(celllist)
      };
      SkuCell.prototype = {
        constructor: SkuCell,
        init: function(celllist) {
          var html = "";
          for(var i = 0; i < celllist.length; i++) {
            html += '<div class="sku_t_title">' + celllist[i] + '</div>'
          }
          this.cellcon.append($(html));
          this.cellcon.append(this.moneyInput);
          this.cellcon.append(this.leftInput);
          $('.sku_tablecell').append(this.cellcon)
        }
      };

      /****
       * 创建表格头部
       * arr 将要创建的表头内容 Arr ["颜色"，"尺码"]
       * **/
      function createTablehead(arr) {
        var mustArr = ["价格", "库存"];
        var relayArr = arr.concat(mustArr);
        html = "";
        for(var i = 0, len = relayArr.length; i < len; i++) {
          html += '<div class="sku_t_title">' + relayArr[i] + '</div>'
        }
        $(".sku_tableHead").html("").append($(html))

      }

      /***
       * 排列组合计算出选择的规格型号的组合方式
       * 
       * */
      function getResult() {
        var head = arguments[0][0];
        for(var i in arguments[0]) {
          if(i != 0) {
            head = group(head, arguments[0][i])
          }
        }
        tabledata = [];
        $(".sku_cell").each(function(index) {
          tabledata.push($(this).attr("id"))
        }).hide()
        for(var j = 0, len = head.length; j < len; j++) {
          var newcell = head[j]["datatext"].split(',')
          var dataid = head[j]["dataid"];
          if(tabledata.indexOf(dataid) < 0) {
            new SkuCell(newcell, dataid)
          } else {
            $("#" + dataid).show()
          }
        }
      };
      //组合前两个数据
      function group(first, second) {
        var result = [];
        for(var i = 0, leni = first.length; i < leni; i++) {
          for(var j = 0, len = second.length; j < len; j++) {
            result.push({
              dataid: first[i]["dataid"] + "-" + second[j]["dataid"],
              datatext: first[i]["datatext"] + "," + second[j]["datatext"]
            })
          }
        }
        return result
      }
      //动态产生一个索引，用于后续操作
      var i = 3;

      function getIndex() {
        return "d" + i++;
      };
      //控制表格内容
      function tableContent() {
        $(".sku_modellist .sku_models").each(function(index, ele) {
          var aa = $(this).find(".itemactive");
          selectedArr[index] = []
          for(var i = 0; i < aa.length; i++) {
            selectedArr[index][i] = {};
            selectedArr[index][i]["dataid"] = $(aa[i]).attr("data-id");
            selectedArr[index][i]["datatext"] = $(aa[i]).text();
          }
        })
        getResult(selectedArr);
      }
      $(function() {
        //点击添加多级型号事件 layer弹出层 
        $("#add_multi_sku").click(function() {
          //layer详细用法 http://www.layui.com/doc/modules/layer.html
          layer.open({
            type: 1,
            resize: false,
            title: "选择商品型号",
            area: ["800px", "456px"],
            btn: ["取消", "确定"],
            content: $(".sku_content"), //此处后放置到弹出层内部的内容
            yes: function(index, layero) { //取消按钮对应回调函数
              layer.close(index)
            },
            btn2: function(index) { //确认按钮对应事件
              //清空规格规格
              $(".sku_modellist").html("");
              var arrs = [];
              selectedArr = {}; //清空
              //获取被选中多级型号元素
              $(".sku_content_sku_list .itemactive").each(function() {
                  var text = $(this).text(); //选中元素的文字
                  var dataid = $(this).attr("data-id"); //选中的元素上的参数用于创建规格时候的唯一标识
                  var arr = sizes[text] || [];
                  sizes[text] = arr;
                  //创建规格
                  new Skumodel(text, arr, dataid)
                  arrs.push(text)
                })
                //根据arrs数据判断出是否显示表格同时清空表格
              if(arrs.length) {
                $(".sku_guige").show()
                $(".sku_table").show();
                $(".sku_tableHead").html('')
                $(".sku_tablecell").html("")
                $(".sku_container .itemactive").toggleClass("itemactive")
                createTablehead(arrs);
              } else {
                $(".sku_table").hide()
                $(".sku_guige").hide()
              }

            }
          })
        });
        //弹窗中的新建sku
        $("#sku_addbtn").click(function() {
          var haveit = false;
          var value=$.trim($(".sku_input").val())
          if(value.length<=0){layer.alert("请输入内容");return}
          $(".sku_content_sku_list a").each(function() {
            if($(this).text() ==value ) {
              layer.msg('新建的已存在,请勿重复创建');
              haveit = true;
              $(".sku_input").val("")
            }
          })
          if(haveit) return;
          var skuitem = '<span class="sku_item"><a data-id="' + getIndex() + '">' + value+ '</a><i class="sku_item_close">×</i></span>'
          $(".sku_content_sku_list").prepend(skuitem);
          $(".sku_input").val("")
        });
        //显示删除符号
        $(".sku_content_sku_list").on("mouseover", ".sku_item", function() {
          $(this).find(".sku_item_close").css({
            display: "inline-block"
          })
        });
        //显示删除符号
        $(".sku_content_sku_list").on("mouseout", ".sku_item", function() {
          $(this).find(".sku_item_close").css({
            display: "none"
          })
        });
        //删除添加的型号
        $(".sku_content_sku_list").on("click", ".sku_item_close", function() {
          $(this).parent().remove();
        })
        $(".sku_content_sku_list").on("click", "a", function() {
          $(this).toggleClass("itemactive")
          var len = $(".sku_content_sku_list .itemactive").length;
          if(len > 3) {
            layer.msg("商品规格最多选择3个");
            $(this).toggleClass("itemactive")
          }
        });
      })
    </script>
  </body>

</html>

@endsection
@section('title','商品添加')