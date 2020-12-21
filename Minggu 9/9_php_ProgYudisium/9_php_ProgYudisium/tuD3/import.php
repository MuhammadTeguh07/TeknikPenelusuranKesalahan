<?php 
		$file_tmp=$_FILES['upload_file']['tmp_name'];
        $file_name=$_FILES['upload_file']['name'];
        $file_size=$_FILES['upload_file']['size'];
        $eror=null;
        //cari extensi file dengan menggunakan fungsi explode
        $explode	= explode('.',$file_name);
        $extensi	= $explode[count($explode)-1];
		$file_ext	= substr($file_name, strripos($file_name, '.'));
		
		echo $file_name." ";
		//echo $explode." ";
		//echo $extensi." ";
		//echo $file_ext;
		//echo $file_tmp;
?>