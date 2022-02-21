const updateBtn = document.querySelector('.updateBtn');
const deleteBtn = document.querySelector('.deleteBtn');
const backBtn = document.querySelector('.backBtn');
const url = window.location.href.split('/');

const number = url[4];
updateBtn.addEventListener('click', () => {
    location.href = `/update/${number}`;
});

deleteBtn.addEventListener('click', () => {
    location.href = `/delete/${number}`;
});

backBtn.addEventListener('click', () => {
    history.back();
})
