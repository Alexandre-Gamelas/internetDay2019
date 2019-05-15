window.onload = function (ev) {
    registerSW();
    console.log("ola");



    let deferredPrompt;
    let btnAdd = document.getElementById('btn');
    window.addEventListener('beforeinstallprompt', (e) => {
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Update UI notify the user they can add to home screen
        btnAdd.style.display = 'block';
    });

    btnAdd.addEventListener('click', (e) => {
        // hide our user interface that shows our A2HS button
        btnAdd.style.display = 'none';
        // Show the prompt
        deferredPrompt.prompt();
        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice
            .then((choiceResult) => {
                if (choiceResult.outcome === 'accepted') {
                    console.log('User accepted the A2HS prompt');
                } else {
                    console.log('User dismissed the A2HS prompt');
                }
                deferredPrompt = null;
            });
    });
}

async function registerSW() {
    if('serviceWorker' in navigator){
        try{
            await navigator.serviceWorker.register('./sw.js');
        } catch (e){
            console.log("SW registration failed lol")
        }
    }
}

