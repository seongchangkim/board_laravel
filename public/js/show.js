/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/show.js ***!
  \******************************/
var updateBtn = document.querySelector('.updateBtn');
var deleteBtn = document.querySelector('.deleteBtn');
var backBtn = document.querySelector('.backBtn');
var url = window.location.href.split('/');
var number = url[4];
updateBtn.addEventListener('click', function () {
  location.href = "/update/".concat(number);
});
deleteBtn.addEventListener('click', function () {
  location.href = "/delete/".concat(number);
});
backBtn.addEventListener('click', function () {
  history.back();
});
/******/ })()
;