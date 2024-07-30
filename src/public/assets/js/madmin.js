var serialize = function(obj) {
    var str = [];
    for (var p in obj)
      if (obj.hasOwnProperty(p)) {
        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
      }
    return str.join("&");
}
var Madmin = function (options = {}) {
    this.init(options);
}

Madmin.prototype = {
    init: function (options) {
        this.pageInit(options);
    },
    pageInit: function (options) {

    },
    majax: function (url, method = 'get', data = {}) {
        const self = this;
        method = method.toUpperCase();
        var xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        xhr.onload = function () {
            // do something to response
            self.ajaxRespone(this.response);
        };

        if(method == 'POST' || method == 'PUT'){
            // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            console.log(data);
            data = JSON.stringify(data);
            xhr.send(data);
        }else{
            xhr.send();
        }
    },
    ajaxRespone: function (res) {
        console.log(res);
    }
}