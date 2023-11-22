var removeCard = $("#remove-card");
var removeButton = $("#remove-btn");

function removeBookById(id){
    var xhr = new XMLHttpRequest();
    xhr.open("DELETE", "../controllers/delete-book.php");
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.send(id);

    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200) {
            removeCard.css("display", "none");
            if(xhr.responseText == "200")
                window.location.replace("index.php");
            else{
                console.log("unable to delete a book: " + xhr.responseText)
            }
        }
    }
}