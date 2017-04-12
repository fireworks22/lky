<?php
header("Content-type:text/html; charset = utf-8");


class  FileOpera{
    /**
     * @param $filename 文件名
     * @return string
     */
    function createFile($filename){
        if(file_exists($filename)){
            return "文件已经存在";
        }else{
            if(touch($filename)){
                return "文件创建成功";
            }else{
                return "文件创建失败";
            }
        }
    }

    /**
     * @param $filename
     * @return string
     */
    function deleteFile($filename){
        if(file_exists($filename)){
            if(unlink($filename)){
                return "文件删除成功";
            }else{
                return "文件删除失败";
            }
        }else{
            return "不存在需要删除的文件";
        }
    }

    /**
     * @param $oldname $oldname  没被更改前的文件名
     * @param $newname  $newname  更改后的文件名
     * @return string
     */
    function renameFile($oldname, $newname){
        if(file_exists($oldname)){
            if(file_exists($newname)){
                return "存在同名文件";
            }else{
                if(rename($oldname, $newname)){
                    return "复制成功";
                }else{
                    return "复制失败";
                }
            }
        }else{
            return "文件不存在";
        }
    }

    /**
     * @param $source  $source 需要剪切的文件
     * @param $dest  $dest  剪切后的路径
     * @return string
     */
    function cutFile($source, $dest){
        if(file_exists($source)){
            if(file_exists($dest)){
                return "存在同名文件";
            }else{
                if(rename($source, $dest)){
                    return "剪切成功";
                }else{
                    return "剪切失败";
                }
            }
        }else{
            return "文件不存在";
        }
    }

    /**
     * @param $source $source 需要复制的文件
     * @param $dest  $dest  复制后的路径
     * @return string
     */
    function copyFile($source, $dest){
        if(file_exists($source)){
            if(file_exists($dest)){
                return "存在同名文件";
            }else{
                if(copy($source, $dest)){
                    return "复制成功";
                }else{
                    return "复制失败";
                }
            }
        }else{
            return "文件不存在";
        }
    }

}