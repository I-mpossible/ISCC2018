

function is_null(){
    var str = $("#encode").val();
    if(str == "鍦ㄨ繖閲岃緭鍏ラ渶瑕佺紪鐮�/瑙ｇ爜鐨勫唴瀹�"){
        alert("璇疯緭鍏ラ渶瑕佺紪鐮�/瑙ｇ爜鐨勫唴瀹�");
        return false;
    }
}

//base64缂栫爜
function base64encode(){
    var base64str = $("#encode").val();
    if(is_null() != false){
        var code = $.base64.encode(base64str);
        $("#decode").val(code);
    }
}

//base64瑙ｇ爜
function base64decode(){
    var base64str = $("#encode").val();
    if(is_null() != false){
        var code = $.base64.decode(base64str);
        $("#decode").val(code);
    }
}

//\u鍗佸叚杩涘埗锛坲nicode)缂栫爜
function unicodeencode(){
    var str = $("#encode").val();
    var res=[];
    if(is_null() != false){
        for(var i=0;i < str.length;i++)
            res[i]=("00"+str.charCodeAt(i).toString(16)).slice(-4);
        $("#decode").val(("\\u"+res.join("\\u")));
    }
}

//\u鍗佸叚杩涘埗锛坲nicode)瑙ｇ爜
function unicodedecode(){
    var str = $("#encode").val();
    var res=[];
    if(is_null() != false){
        str=str.replace(/\\/g,"%");
        $("#decode").val(unescape(str));
    }
}

//&#x;鍗佸叚杩涘埗锛坲nicode)缂栫爜
function unicodexencode(){
    var str = $("#encode").val();
    var res=[];
    if(is_null() != false){
        for(var i=0;i < str.length;i++)
            res[i]=("00"+str.charCodeAt(i).toString(16)+";");
        $("#decode").val(("&#x"+res.join("&#x")));
    }
}

//&#x;鍗佸叚杩涘埗锛坲nicode)瑙ｇ爜
function unicodexdecode(){
    var str = $("#encode").val();
    var res=[];
    if(is_null() != false){
        str=str.replace(/&#x00/g,"%");
        str=str.replace(/;/g,"");
        $("#decode").val(unescape(str));
    }
}

//&#鍗佽繘鍒剁紪鐮�
function tenencode(){
    var str = $("#encode").val();
    var res=[];
    if(is_null() != false){
        for(var i=0;i < str.length;i++)
            res[i]=("0000"+str.charCodeAt(i));
        $("#decode").val(("&#"+res.join("&#")));
    }
}

//&#鍗佽繘鍒惰В鐮�
function tendecode(){
    var str = $("#encode").val().split("&");
    var res = "";
    if(is_null() != false){
        for(i=1;i < str.length;i++){
            str[i] = str[i].replace("#","");
            res += String.fromCharCode(str[i]);
        }
        $("#decode").val(res);
    }
}

//&#鍗佽繘鍒剁紪鐮�
function tenfenencode(){
    var str = $("#encode").val();
    var res=[];
    if(is_null() != false){
        for(var i=0;i < str.length;i++)
            res[i]=(str.charCodeAt(i)+";");
        $("#decode").val(("&#"+res.join("&#")));
    }
}

//&#鍗佽繘鍒惰В鐮�
function tenfendecode(){
    var str = $("#encode").val().split("&");
    var res = "";
    if(is_null() != false){
        for(i=1;i < str.length;i++){
            str[i] = str[i].replace("#","");
            str[i] = str[i].replace(";","");
            res += String.fromCharCode(str[i]);
        }
        $("#decode").val(res);
    }
}

//hex缂栫爜
function hexencode(){
    var str = $("#encode").val();
    var res=[];
    if(is_null() != false){
        for(var i=0;i < str.length;i++)
            res[i]=(str.charCodeAt(i).toString(16));
        $("#decode").val((res.join("")));
    }
}

//hex瑙ｇ爜
function hexdecode(){
    var str = $("#encode").val();
    var strlength = str.length;
    var res="";
    if(is_null() != false){
        //鍒ゆ柇鏄惁鑳藉彇妯�
        if(strlength%2 == 0){
            for(i=0; i<strlength; i=i+2){
                var s = "%"+str.substr(i,2);
                res += unescape(s);
            }
        }
        $("#decode").val(res);
    }
}

//url涓€娆＄紪鐮�
function urlencode(){
    var str = $("#encode").val();
    if(is_null() != false){
        $("#decode").val(escape(str));
    }
}

//url涓€娆¤В鐮�
function urldecode(){
    var str = $("#encode").val();
    if(is_null() != false){
        $("#decode").val(unescape(str));
    }
}

//url浜屾缂栫爜
function url2encode(){
    var str = $("#encode").val();
    if(is_null() != false){
        $("#decode").val(escape(str).replace(/%/g,"%25"));
    }
}

//url浜屾瑙ｇ爜
function url2decode(){
    var str = $("#encode").val();
    if(is_null() != false){
        var s = str.replace(/%25/g,"%");
        $("#decode").val(unescape(s));
    }
}





