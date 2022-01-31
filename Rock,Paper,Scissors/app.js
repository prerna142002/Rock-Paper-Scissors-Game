let userScore = 0;
let compScore = 0;
const userScore_span = document.getElementById("user-score");
const computerScore_span = document.getElementById("comp-score");
const scoreBoard_div = document.querySelector(".score-board");
const result_div = document.querySelector(".result > p");
const rock_div = document.getElementById("r");
const paper_div = document.getElementById("p");
const scissors_div = document.getElementById("s");

dict = {
    "r" : 'Rock',
    "p" : 'Paper',
    "s" : 'Scissors'
};

const smallUserWord = "user".fontsize(3).sup();
const smallCompWord = "comp".fontsize(3).sup();

function getComputerChoice(){
    const choices = ['r','p','s'];
    const randomNumber = Math.floor(Math.random() * 3);
    return choices[randomNumber];
}

function win(user, comp){
    userScore++;
    userScore_span.innerHTML = userScore;
    result_div.innerHTML = `${dict[user]} ${smallUserWord} beats ${dict[comp]} ${smallUserWord} YOU WIN!! `;
    document.getElementById(user).classList.add("green-glow");
    // All classes on specific element.
    setTimeout( () => document.getElementById(user).classList.remove('green-glow'),1500);
}

function lose(user, comp){
    compScore++;
    computerScore_span.innerHTML = userScore;
    result_div.innerHTML = `${dict[user]} ${smallUserWord} lost by ${dict[comp]} ${smallCompWord} YOU LOSE!!`;
    document.getElementById(user).classList.add("red-glow");
    setTimeout( () => document.getElementById(user).classList.remove("red-glow") ,1500);
}
function draw(user, comp){
    result_div.innerHTML = `${dict[user]} ${smallUserWord} same as ${dict[comp]} ${smallCompWord} DRAW!! `;
    document.getElementById(user).classList.add('grey-glow');
    setTimeout( ()=> document.getElementById(user).classList.remove('grey-glow'),1500);
}

function game(userChoice){
    const computerChoice = getComputerChoice();
    switch(userChoice+computerChoice){
        case "rs":
        case "pr":
        case "sp":
            console.log("user winsa")
            win(userChoice,computerChoice)
            break;
        case "rp":
        case "ps":
        case "sr":
            // console.log("user lose")
            lose(userChoice,computerChoice)
            break;
        case "pp":
        case "rr":
        case "ss":
            // console.log("draw")
            draw(userChoice,computerChoice)
            break;
    }
} 


function main(){
    console.log("Sdfn");
    rock_div.addEventListener('click',() => game("r"))
        //console.log("rock");
    
    paper_div.addEventListener('click',() => game("p"))
        //console.log("paper");
    
    scissors_div.addEventListener('click',() => game("s"))
        //console.log("scciii");)      
}
main();
