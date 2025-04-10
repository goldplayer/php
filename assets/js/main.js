document.getElementById('add_form').addEventListener('submit', function(e) {
    e.preventDefault(); // Останавливаем стандартную отправку

    const form = e.target;
    const formData = new FormData(form); // автоматически берёт все поля: fio, username, email

    fetch('add_users.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        const responseDiv = document.querySelector('.get_message');
        responseDiv.innerText = data.message;

        if (data.success) {
            responseDiv.style.color = 'green';
            form.reset();
        } else {
            responseDiv.style.color = 'red';
        }
    })
    .catch(error => {
        console.error('Ошибка:', error);
    });
});