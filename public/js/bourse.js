// AJAX request
httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {

    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
            //  Store the json file in a variable
            let array = JSON.parse(httpRequest.responseText);

            // recover from my class
            let tbody = document.getElementById("list");
            let thead = document.getElementById("headList");
            
            // create index line
            for (let property in array[0]) {
                let th = document.createElement("th");
                let td = document.createElement("td");
                th.innerText = property;
                thead.appendChild(th);
                td.classList.add("dropdown-item");
            }

            // create a line for each object of the json
            for (i=0 ; i<array.length ; i++){
                let tr = document.createElement("tr");
                for (let property in array[i]) {
                    let td = document.createElement("td");
                    td.innerText = array[i][property];
                    tr.appendChild(td);
                }
                tbody.appendChild(tr);
            }
        } 
         else {
            // there was a problem with the request,
            console.log("ERROR");
        }
    } 
    else {
        // not ready yet,
        console.log("chargement en cours");
    }
};
// opening and sending of the request,
httpRequest.open('GET', 'model/data/bourse.json', true);
httpRequest.send();

// style of table