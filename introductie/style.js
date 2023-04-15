const timeOfDay = date("H:i:a");
const img = document.getElementById('background_image');

if(timeOfDay >= '06:00'&& timeOfDay < '12:00'){
    img.src = 'images/morning.png';
}else if(timeOfDay >= '12:00'&& timeOfDay < '18:00'){
    img.src = 'images/afternoon.png';
}else if(timeOfDay >= '18:00'&& timeOfDay < '00:00'){
    img.src = 'images/evening.png';
}else if(timeOfDay >= '00:00'&& timeOfDay < '06:00'){
    img.src = 'images/night.png';
}
