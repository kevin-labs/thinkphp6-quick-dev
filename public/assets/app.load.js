/**
 * 动态加载JS
 * @param {string} url 脚本地址
 * @param {function} callback  回调函数
 */
function dynamicLoadJs(url, callback) {
    var head = document.getElementsByTagName("head")[0];
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = url;
    if (typeof (callback) == "function") {
        script.onload = script.onreadystatechange = function () {
            if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete") {
                callback();
                script.onload = script.onreadystatechange = null;
            }
        };
    }
    head.appendChild(script);
}

/**
* 动态加载CSS
* @param {string} url 样式地址
*/
function dynamicLoadCss(url) {
    var head = document.getElementsByTagName("head")[0];
    var link = document.createElement("link");
    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = url;
    head.appendChild(link);
}

/**
 * 加载资源
 */
async function load() {
    return fetch('//ipinfo.io/json')
    .then(response => response.json())
    .then(data => {
        console.log('Fetch Success ~');
        console.log('You IP: '+data.ip+' Country: '+data.country);
        // 中国地区
        if(data.country === 'CN'){
            dynamicLoadJs("//cdn.jsdelivr.net/npm/notyf@3/notyf.min.js",function(){alert("加载js成功")});
            dynamicLoadCss("//cdn.jsdelivr.net/npm/notyf@3/notyf.min.css",function(){alert("加载css成功")})            
        }
        // 海外地区
    })
    .catch(error => {
        alert('Loader error ~');
        console.error('There has been a problem with your fetch operation:', error);
        window.stop();
    });
}
console.log( load() );;

// dynamicLoadJs("//cdn.jsdelivr.net/npm/notyf@3/notyf.min.js",function(){alert("加载js成功")});
// dynamicLoadCss("//cdn.jsdelivr.net/npm/notyf@3/notyf.min.css",function(){alert("加载css成功")})