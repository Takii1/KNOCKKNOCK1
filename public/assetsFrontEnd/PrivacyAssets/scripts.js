var tab_lists = document.querySelectorAll(".tabs_list ul li");
var tab_items = document.querySelectorAll(".tab_item"); 

tab_lists.forEach(function(list){
  list.addEventListener("click", function(){
    var tab_data = list.getAttribute("data-tc");
    
    tab_lists.forEach(function(list){
      list.classList.remove("active");
    });
    list.classList.add("active");
    
    tab_items.forEach(function(item){
      var tab_class = item.getAttribute("class").split(" ");
      if(tab_class.includes(tab_data)){
        item.style.display = "block";
      }
      else{
        item.style.display = "none";
      }
      
    })
    
  })
})

// Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
