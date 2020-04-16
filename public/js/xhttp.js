var xhttp = new XMLHttpRequest;

const xmlHttpPost = (url,callback,parameters = '') => {

    xhttp.onreadystatechange = callback;

    xhttp.open('POST',url+'.php', true);

    if(typeof(parameters) != 'object'){
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    xhttp.send(parameters);
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