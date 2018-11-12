<?php
	
	// 文件上传方法
	function upload(Request $request)
    {
        $file = $request->file('Filedata');
        // 判断目录是否存在
        $dir = $request->input('file');
        if (!file_exists('./Uploads/'.$dir.'')) {
            mkdir('./Uploads/'.$dir.'');
        }
        // 判断上传的文件是否有效
        if ($file->isValid()) {
            // 获取后缀
            $ext = $file->getClientOriginalExtension();
            // 生成新的文件名
            $newFile = time().rand().'.'.$ext;
            // 移动到指定目录
            $request->file('Filedata')->move('./Uploads/Goods/',$newFile);
            echo $newFile;
        }
    }