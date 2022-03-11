function computerPlay(){
    let options=["Rock","Paper","Scissors"];
    let rand=Math.floor(Math.random()*3)
    return (options[rand]);    
}
function playRound(playerSelection,computerSelection){
    let guy=playerSelection.toLowerCase();
    let com=computerSelection.toLowerCase();
    if(guy=="rock"){
        if(com=="rock"){return "Tie Game!! "+guy+" and "+guy+" is tie";}
        if(com=="paper"){return "You Lose! Paper beats Rock";} 
        if(com=="scissors"){return "You Win! Rock beats Scissors";} 
    }
    if(guy=="paper"){
        if(com=="rock"){return "You Win! Paper beats Rock";}
        if(com=="paper"){return "Tie Game!! "+guy+" and "+guy+" is tie";}
        if(com=="scissors"){return "You Lose! Scissors beats Paper";} 
    }
    if(guy=="scissors"){
        if(com=="rock"){return "You Lose! Rock beats Scissors";} 
        if(com=="paper"){return "You Win! Scissors beats Paper";} 
        if(com=="scissors"){return "Tie Game!! "+guy+" and "+guy+" is tie";}
    }
}
function game(){
    var userwins=0;
    var compwins=0;
    for(let i=0;i<5;i++){
        let user=prompt("Rock paper Scissors say Shoot")
        let ans=playRound(user,computerPlay());
        console.log(ans);
        if(ans.includes("Win")){
            userwins+=1;
            console.log(userwins);
        }
        else if(ans.includes("Lose")){
            compwins+=1;
            console.log(compwins);
        }
    }
    console.log("You won "+userwins+" times and the computer won "+compwins+" times");
}
game()



