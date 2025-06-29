function recurseCutText(el){
    el.childNodes.forEach(node=>{
	if(node.nodeType === 3 && node.nodeValue !== ""){
	    console.log(node.nodeValue.trim()); 
	}
	else{
	    recurseCutText(node);
	}
    })
}
function cuttext(){
    document.querySelectorAll("*[cuttext]").forEach(a=>{
	recurseCutText(a);
    });
}
cuttext();
