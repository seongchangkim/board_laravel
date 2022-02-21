/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/create.js ***!
  \********************************/
var title = document.getElementById('title');
var content = document.getElementById('content');
var frm = document.getElementById('frm');
var submitBtn = document.querySelector('.submitBtn');
var backBtn = document.querySelector('.backBtn');

var submit = function submit() {
  var titleVal = title.value;
  var contentVal = content.value;

  if (titleVal === '') {
    alert('제목을 입력하세요!');
  }

  if (contentVal === '') {
    alert('내용을 입력하세요!');
  }

  if (contentVal !== '' && titleVal !== '') {
    frm.submit();
  }
};

submitBtn.addEventListener('click', submit);
backBtn.addEventListener('click', function () {
  history.back();
});
/******/ })()
;