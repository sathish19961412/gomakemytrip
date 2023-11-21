

productScroll1();

function productScroll1() {
let slider1 = document.getElementById("slider1");
let next1 = document.getElementsByClassName("pro-next1");
let prev1 = document.getElementsByClassName("pro-prev1");
let slide1 = document.getElementById("slide1");
let item1 = document.getElementById("slide1");

for (let J = 0; J < next1.length; J++) {
   //refer elements by class name

   let position1 = 0; //slider postion

   prev1[J].addEventListener("click", function() {
      //click previos button
      if (position1 > 0) {
      //avoid slide left beyond the first item
      position1 -= 1;
      translateX(position1); //translate items
      }
   });

   next1[J].addEventListener("click", function() {
      if (position1 >= 0 && position1 < hiddenItems()) {
      //avoid slide right beyond the last item
      if (position1<7){
         position1 += 1;
      }
      translateX(position1); //translate items
      }
   });
}

function hiddenItems() {
   //get hidden items
   let items = getCount(item1, false);
   let visibleItems = slider1.offsetWidth / 210;
   return items - Math.ceil(visibleItems);
}
}

function translateX(position1) {
//translate items
slide1.style.left = position1 * -210 + "px";
}

function getCount1(parent1, getChildrensChildren1) {
//count no of items
let relevantChildren1 = 0;
let children1 = parent1.childNodes.length;
for (let J = 0; J < children1; J++) {
   if (parent1.childNodes[J].nodeType != 3) {
      if (getChildrensChildren)
      relevantChildren1 += getCount1(parent1.childNodes[J], true);
      relevantChildren1++;
   }
}
return relevantChildren1;
}