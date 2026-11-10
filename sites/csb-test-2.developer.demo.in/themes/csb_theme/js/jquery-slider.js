if(typeof jQuery.type !== "function"){

  jQuery.type = function(obj){

    if(obj == null)return obj + "";

    return typeof obj === "object" || typeof obj === "function"

      ? ({}).toString.call(obj).match(/\s([a-zA-Z]+)/)[1].toLowerCase()

      : typeof obj;

  };

} 
