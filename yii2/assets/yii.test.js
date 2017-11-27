/**
 * Created by anlewo0208 on 2017/11/18.
 */

(function ($) {

    $.fn.yiiProgressTest = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.yiiActiveForm');
            return false;
        }
    };
    var events = {

    };
    var methods = {
        init:function(){
           alert(123213321);
        }
    }
});