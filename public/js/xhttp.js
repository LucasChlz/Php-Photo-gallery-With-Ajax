var xhttp = new XMLHttpRequest;

const xmlHttpPost = (url,callback,param = '') => {

    xhttp.onreadystatechange = callback;

    xhttp.open('POST',url+'.php', true);

    if(typeof(param) != 'object'){
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    xhttp.send(param);
}

const xmlHttpGet = (url,callback,param = '') => {

    xhttp.onreadystatechange = callback;

    xhttp.open('GET',url+'.php'+param, true);
    xhttp.send();

}

const beforeSend = (callback) => {

    if(xhttp.readyState < 4) {
        callback();
    }
}

const success = (callback) => {

    if(xhttp.readyState == 4 && xhttp.status == 200) {
        callback();
    }
}

const error = (callback) => {
    xhttp.onerror = callback;
}