## 文件上传的相关配置
    file_uploads = On 支持HTTP+上传
    upload_tmp_dir = "" 文件上传的临时目录
    upload_max_filesize = 2M 文件上传的最大值
    max_file_uploads = 20 运行一次上传的最大文件数
    post_max_size = 8M POST方式发送数据的最大值
## 上传文件的错误号
    。 0 没有发生错误，上传成功
    。 1 上传文件超过了PHP配置文件中upload_max_filesize选项的值
    。 2 超过了表单MAX_FILE_SIZE限制的大小
    。 3 文件部分被上传
    。 4 没有文件被上传
    。 6 没有找到临时文件
    。 7 文件写入失败