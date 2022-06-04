/* === DISPLAY ADD POSTS === */
let add_post = document.querySelector(".add_post")
let add_post_btn = document.querySelector("#add_post_btn")


add_post_btn.addEventListener('click', ()=>{
  if (add_post.style.height !== "600px") {
    add_post.style.height = "600px"
    add_post.style.marginTop = "20px"
  }else{
    add_post.style.height = "0"
    add_post.style.marginTop = "-20px"
  }
})


/* ==== OPEN AND CLOSE EDIT POST CONTAINER ==== */
let edit_btn=document.querySelectorAll("#edit_btn")
let edit_con_filter = document.querySelector(".edit_con_filter")
let edit_con=document.querySelector(".edit_con")
let close_btn = document.querySelector("#close_edit_con")



edit_btn.forEach((edit_btn)=>{
  edit_btn.addEventListener('click', ()=>{
  edit_con_filter.style = "display: block"

})})


close_btn.addEventListener("click",()=>{
  edit_con_filter.style = "display: none"
  modifyState()
})



function addState() {
            let stateObj = { id: "100" };
              
            window.history.pushState(stateObj,
                     "Page 2", "/admin/admin.php?php=1");
        }

function modifyState() {
            let stateObj = { id: "100" };
            window.history.replaceState(stateObj,
                        "Page 3", "/admin/admin.php");
        }
