const images = document.getElementsByClassName('image_container')[0].getElementsByTagName('img');
for (let image = 0; image < images.length; image++) {
    images[image].onclick = () => {
        document.getElementsByClassName("popup-image")[0].style.display = "block";
        document.getElementsByClassName("popup-image")[0].getElementsByTagName('img')[0].src = images[image].getAttribute("src");
    }
}

document.getElementsByClassName('popup-image')[0].onclick = () => {
    document.getElementsByClassName('popup-image')[0].style.display = 'none';
};

