function getRandomPosition(){
    const x = Math.floor(Math.random() * (window.innerWidth - 100)); // Adjust for bird width
    const y = Math.floor(Math.random() * (window.innerHeight - 400)) + 100; // Adjust for bird height and bottom
    return { x, y };
}

function moveBird() {
    const bird = document.querySelector('.moanimated-bird');
    const currentX = parseInt(bird.style.left || 0, 10);
    const { x, y } = getRandomPosition();

    if (x > currentX) {
        bird.classList.add('flipped');
    } else {
        bird.classList.remove('flipped');
    }

    bird.style.left = `${x}px`;
    bird.style.bottom = `${y}px`;
}

function moveBird2() {
    const bird = document.querySelector('.moanimated-bird2');
    const currentX = parseInt(bird.style.left || 0, 10);
    const { x, y } = getRandomPosition();

    if (x > currentX) {
        bird.classList.add('flipped');
    } else {
        bird.classList.remove('flipped');
    }

    bird.style.left = `${x}px`;
    bird.style.bottom = `${y}px`;
}

function moveButterfly() {
    const butterfly = document.querySelector('.moanimated-butterfly');
    const currentX = parseInt(butterfly.style.left || 0, 10);
    const { x, y } = getRandomPosition();

    if (x > currentX) {
        butterfly.classList.add('flipped');
    } else {
        butterfly.classList.remove('flipped');
    }

    butterfly.style.left = `${x}px`;
    butterfly.style.bottom = `${y}px`;
}

function moveEagle() {
    const eagle = document.querySelector('.moanimated-eagle');
    const currentX = parseInt(eagle.style.left || 0, 10);
    const { x, y } = getRandomPosition();

    if (x > currentX) {
        eagle.classList.add('flipped');
    } else {
        eagle.classList.remove('flipped');
    }

    eagle.style.left = `${x}px`;
    eagle.style.bottom = `${y}px`;
}

function moveSuperman() {
    const superman = document.querySelector('.moanimated-superman');
    const currentX = parseInt(superman.style.left || 0, 10);
    const { x, y } = getRandomPosition();

    if (x > currentX) {
        superman.classList.add('flipped');
    } else {
        superman.classList.remove('flipped');
    }

    superman.style.left = `${x}px`;
    superman.style.bottom = `${y}px`;
}

function startAnimation() {
    // Select all the birds using their class
    const birds = document.querySelectorAll('.moanimated-bird, .moanimated-bird2, .moanimated-butterfly, .moanimated-eagle, .moanimated-superman');
    // Loop through each bird and set its initial position
    birds.forEach(bird => {
        setStartingPos(bird);
    });

    moveBirds();
    setInterval(() => {
        moveBirds();
    }, 13000); // 3 seconds for movement + 10 seconds pause
    
}

// function to run all moveBird functions at once
// used to make startAnimation() easier to read
function moveBirds(){
    moveBird();
    moveBird2();
    moveButterfly();
    moveEagle();
    moveSuperman();
}

// Gives each image a random starting positon
function setStartingPos(element){
    const {x,y} = getRandomPosition();
    element.style.left=`${x}px`;
    element.style.bottom=`${y}px`;

    // add in transition after initial position is set
    requestAnimationFrame(() =>{
        element.style.transition = 'all 3s ease';
    });
}

window.onload = startAnimation;