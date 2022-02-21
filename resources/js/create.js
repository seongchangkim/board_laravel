const title = document.getElementById('title');
const content = document.getElementById('content');
const frm = document.getElementById('frm');
const submitBtn = document.querySelector('.submitBtn');
const backBtn = document.querySelector('.backBtn');

const submit = () => {
    const titleVal = title.value;
    const contentVal = content.value;

    if(titleVal === ''){
        alert('제목을 입력하세요!');
    }

    if(contentVal === ''){
        alert('내용을 입력하세요!');
    }

    if(contentVal !== '' && titleVal !== ''){
        frm.submit();
    }
}

submitBtn.addEventListener('click', submit);

backBtn.addEventListener('click', () => {
    history.back();
})
