document.addEventListener("DOMContentLoaded", function () {
    let messages = Array.from(document.querySelectorAll('.message-alert li'))
    setInterval(()=>{
        messages.forEach((alert, key) => setInterval(() => alert.remove(), 9000 * key))
    },6000)
})