.multi-item-carousel{
.carousel-inner{
> .item{
transition: 500ms ease-in-out left;
}
.active{
&.left{
left:-33%;
}
&.right{
left:33%;
}
}
.next{
left: 33%;
}
.prev{
left: -33%;
}
@media all and (transform-3d), (-webkit-transform-3d) {
> .item{
// use your favourite prefixer here
transition: 500ms ease-in-out left;
transition: 500ms ease-in-out all;
backface-visibility: visible;
transform: none!important;
}
}
}
.carouse-control{
&.left, &.right{
background-image: none;
}
}
}

// non-related styling:
body{
background: #333;
color: #ddd;
}
h1{
color: white;
font-size: 2.25em;
text-align: center;
margin-top: 1em;
margin-bottom: 2em;
text-shadow: 0px 2px 0px rgba(0, 0, 0, 1);
}
<?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/listproduct/css.blade.php ENDPATH**/ ?>