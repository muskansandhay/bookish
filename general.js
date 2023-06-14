var myPopup
    // When the user clicks on div, open the popup
    function myFunction(myPopup) {
      var popup = document.getElementById(myPopup);
      popup.classList.toggle("show");
    }




    
        

        function bookInfo(bookid) {
          console.log(bookid);
          var info = { id: bookid };
          fetch('template/book.php', {
            method: 'POST',
            body: JSON.stringify(info)
          })
            .then(response => response.text())
            .then(result => {
              console.log(result); // Handle the response from the PHP file
              alert("Done successfully!");
        
              // Open the PHP file in a new window or tab
              window.open('template/book.php');
            })
            .catch(error => {
              console.error('Error:', error);
            });
        }
        

  



  
