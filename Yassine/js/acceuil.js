const imgvid = document.querySelector('.imgvid');
const vidcontainer= document.querySelector('.vidcontainer');
const close= document.querySelector('.close');
const player= document.querySelector('.player');


player.addEventListener('click', ()=>{
    vidcontainer.classList.add('show');
});

imgvid.addEventListener('click', ()=>{
    vidcontainer.classList.add('show');
});

close.addEventListener('click', ()=>{
    vidcontainer.classList.remove('show');
});

// App.NavbarController = Ember.ArrayController.extend({
//     isAuthenticated: false,
//     login: function() {
//       this.set('isAuthenticated', true);
//     },
//     logout: function() {
//       this.set('isAuthenticated', false);
//     }
//   });
