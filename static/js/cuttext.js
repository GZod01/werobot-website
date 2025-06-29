function scrollOverflow(e){
    let p= (e.srcElement.scrollY-e.srcElement.scrollTop/((e.srcElement.scrollBottom/2)-e.srcElement.scrollTop))*100;
    console.log(p);
};
function globalScroll(e){
    let p= (e.srcElement.scrollY-e.srcElement.scrollTop/((e.srcElement.scrollBottom/2)-e.srcElement.scrollTop))*100;
    console.log(p);
}
function scrollCutText(percentage){
}
function recurseCutText(el){
    el.childNodes.forEach(node=>{
	if(node.nodeType === 3 && node.nodeValue.trim() !== ""){
	    let val = node.nodeValue.trim();
	    let vallist = val.split(" ");
	    let valel = document.createElement("span");
	    valel.setAttribute("cuttext-span-parent",1);
	    vallist.forEach(t=>{
		let sp = document.createElement("span");
		sp.innerText = t+" ";
		sp.setAttribute("cuttext-span","hidden");
		valel.appendChild(sp);
	    });
	    node.replaceWith(valel);
	}
	else{
	    recurseCutText(node);
	}
    })
}
function cuttext(){
    document.querySelectorAll("*[cuttext]").forEach(a=>{
	recurseCutText(a);
	a.onscroll = scrollOverflow;
    });
    window.onscroll = globalScroll;
}
cuttext();
