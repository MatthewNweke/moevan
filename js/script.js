const hamburger = document.querySelector(".hamburger")
const sidebar = document.querySelector(".sidebar");
const menu = document.querySelector("#menu");


// const main = document.querySelector(".main");


sidebar.style.left = "-78px";


hamburger.addEventListener("click", (e) => {
  hamburger.classList.toggle("clicked");
  if(sidebar.style.left == "-78px")
    {sidebar.style.left = "0";
    }
    else{
      sidebar.style.left = "-78px";
    }

  });

//   $('body').click(function(event){
//     if($(event.target).attr('id') !== "sidebar") {
//       sidebar.style.visibility = "hidden";
//     }
//  });

//  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

 
