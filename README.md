# README.md
WJ's PHP FrameWork

## Nginx 配置
if (!-f $request_filename) {
    rewrite ^/api/([0-9a-zA-Z]+)/([0-9a-zA-Z/]+)(.html|.json)?$ /api.php?m=$1&a=$2&$query_string last;
    rewrite ^/([0-9a-zA-Z]+)/([0-9a-zA-Z/]+)(.html|.json)?$ /index.php?m=$1&a=$2&$query_string last;
}

## 接口访问方式
MVC方式：http://framework.w6688j.com/Ajax/Cjt/test.html
Api方式：http://framework.w6688j.com/Api/Cjt/test.html