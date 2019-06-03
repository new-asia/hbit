<script>
    window.onload = function() {
        var i = 1;
        var j = 0;
        var e = target;
        var win = document.documentElement || document.body;


        function intern() {
            var width = 0;
            var height = e.clientHeight;
            var left = parseFloat(e.style.left);
            var top = parseFloat(e.style.top);
            var windowWidth = 0;
            var windowHeight = win.clientHeight;
            if (windowWidth - width < (left + i)) {
                i = -i;
            } else if ((left + i) < -700) {
                i = -i;
            }
            if (windowHeight - height < (top + j)) {
                j = -j;
            } else if ((top + j) < 0) {
                j = -j;
            }
            e.style.left = left + i + "px";
            e.style.top = top + j + "px";
        }
        setInterval(intern, 30);
    };
</script>
<script type="application/ld+json">
        {
            "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
            "@id": "/",
            "appid": "1600403569933280",
            "title": "鸿博IT教育-匠心打造,品质铸就",
            "images": [
                "/upload/201807/04/201807041026260216.jpg",
                "/upload/201806/24/201806241911120948.png",
                "/upload/201806/24/201806241911323214.png"
            ], //请在此处添加希望在搜索结果中展示图片的url，可以添加0个、1个或3个url
            "pubDate": "2017-06-15T08:00:01" // 需按照yyyy-mm-ddThh:mm:ss格式编写时间，字母T不能省去
        }
    </script>

<script type="text/javascript" src="/static/scripts/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/scripts/jquery/jquery.form.min.js"></script>
{{--<script type="text/javascript" src="/static/scripts/jquery/Validform_v5.3.2_min.js"></script>--}}
<script type="text/javascript" src="/static/scripts/artdialog/dialog-plus-min.js"></script>
<script type="text/javascript" src="/static/templates/main/js/common.js"></script>
<script src="/static/templates/main/js/global.js"></script>
<script type="text/javascript" src="/static/templates/main/js/html5_20170105.js"></script>
<script src="/static/templates/main/js/php_new.js"></script>
