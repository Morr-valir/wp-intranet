let darkMode = localStorage.getItem("darkMode");
const dark = document.getElementById("Dark-mode");

//Foncton d'ajout de mode nuit
const trueMode = () => {
    document.body.classList.add("darkmode");
    localStorage.setItem("darkMode","enabled");
};
// Fonction de retrait de mode nuit
const falseMode = () => {
    document.body.classList.remove("darkmode");
    localStorage.setItem("darkMode",null);
};
//Stockage du mode nuit
if(darkMode === "enabled"){
    trueMode();
}


// Fonction d'event et changement de mode 
dark.addEventListener('change', () =>{
    darkMode = localStorage.getItem("darkMode");
    if(darkMode !== "enabled"){
        trueMode();
    }else{
        falseMode();
    }
});