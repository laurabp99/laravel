export default (() => {

//   let tabs = document.querySelectorAll(".tabs");

//   tabs.forEach(tab => {
//     tab.addEventListener("click",(event)=>{
//       if(event.target.closest('.tab')){
          
//         const tab = event.target.closest('.tab');
//         tab.parentElement.querySelector('.active').classList.remove('active');
//         tab.classList.toggle('active');

//         const tabContents = document.querySelectorAll('.tab-content');

//         tabContents.forEach(tabContent => {

//             if(tab.dataset.tab ==  tabContent.dataset.tab){
//                 tabContent.classList.add('active')
//             } else if (tab.dataset.tab != tabContent.dataset.tab){
//                 tabContent.classList.remove('active')
//             }
//         });
//       }
//     })
//   })   

  const form = document.querySelector(".form");
  
  form.addEventListener("click", (event)=> {
    let tab = event.target.closest(".tab");
    let lastActiveTab = tab.parentNode.querySelector(".active")
    if (tab) {
      lastActiveTab.classList.remove("active")
      tab.classList.add("active")
      document.querySelector(`.tab-content[data-tab="${tab.dataset.tab}"]`).classList.add("active")
      document.querySelector(`.tab-content[data-tab="${lastActiveTab.dataset.tab}"]`).classList.remove("active")
    }
  })


})();


// export default (() => {

//   const main = document.querySelector('main');

//   main?.addEventListener('click', (event) => {

//     if (event.target.closest('.tab')) {

//       if (event.target.closest('.tab').classList.contains('active')) {
//         return;
//       }
      
//       const tabClicked = event.target.closest('.tab');
//       const tabActive = tabClicked.parentElement.querySelector('.active');
      
//       tabClicked.classList.add('active');
//       tabActive.classList.remove('active');

//       tabClicked.closest('section').querySelector(`.tab-content.active[data-tab="${tabActive.dataset.tab}"]`).classList.remove('active');
//       tabClicked.closest('section').querySelector(`.tab-content[data-tab="${tabClicked.dataset.tab}"]`).classList.add('active');
//     }
//   });
  
// })();