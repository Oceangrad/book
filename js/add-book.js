var addBookForm = $("#book-form");

addBookForm.submit(function(){
    var book = {
        book_name: this.book_name.value,
        author_id: this.author_id.value,
        publishing_id: this.publishing_id.value,
        genre_id: this.genre_id.value,
        year: this.year.value,
        purchase_price: this.purchase_price.value,
        sale_price: this.sale_price.value,
        picture: this.picture.value
    };

    var request = JSON.stringify(book);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../controllers/add-book.php");
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.send(request);

    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200) {
            if(xhr.responseText == "200")
                window.location.replace("index.php");
            else{
                console.log("unable to create a book: " + xhr.responseText)
            }
                
        }
    }

    event.preventDefault();
})