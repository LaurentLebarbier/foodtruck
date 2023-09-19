(self["webpackChunk"] = self["webpackChunk"] || []).push([["history"],{

/***/ "./assets/history.js":
/*!***************************!*\
  !*** ./assets/history.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_scrollHistory__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/scrollHistory */ "./assets/js/scrollHistory.js");
/* harmony import */ var _js_scrollHistory__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_js_scrollHistory__WEBPACK_IMPORTED_MODULE_0__);


/***/ }),

/***/ "./assets/js/scrollHistory.js":
/*!************************************!*\
  !*** ./assets/js/scrollHistory.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.search.js */ "./node_modules/core-js/modules/es.string.search.js");

window.addEventListener('scroll', function () {
  var n = parseInt(location.search[6]);

  if (window.scrollY == window.scrollMaxY) {
    if (location.search == "") {
      location.search = "?page=2";
    }

    if (location.search == "?page=" + n) {
      location.search = "?page=" + (n + 1);
    }
  }

  if (window.scrollY == 0) {
    if (location.search == "?page=1") {
      location.search = "";
    } else if (location.search == "?page=" + n) {
      location.search = "?page=" + (n - 1);
    }
  }
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_export_js-node_modules_core-js_internals_object-create-7a2fef","vendors-node_modules_core-js_modules_es_parse-int_js-node_modules_core-js_modules_es_string_s-a40b3a"], () => (__webpack_exec__("./assets/history.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiaGlzdG9yeS5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDQUFBLE1BQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0IsUUFBeEIsRUFBa0MsWUFBTTtBQUNwQyxNQUFJQyxDQUFDLEdBQUdDLFFBQVEsQ0FBQ0MsUUFBUSxDQUFDQyxNQUFULENBQWdCLENBQWhCLENBQUQsQ0FBaEI7O0FBRUEsTUFBSUwsTUFBTSxDQUFDTSxPQUFQLElBQWtCTixNQUFNLENBQUNPLFVBQTdCLEVBQXlDO0FBQ3JDLFFBQUlILFFBQVEsQ0FBQ0MsTUFBVCxJQUFtQixFQUF2QixFQUEyQjtBQUN2QkQsTUFBQUEsUUFBUSxDQUFDQyxNQUFULEdBQWtCLFNBQWxCO0FBQ0g7O0FBRUQsUUFBSUQsUUFBUSxDQUFDQyxNQUFULElBQW1CLFdBQVdILENBQWxDLEVBQXFDO0FBQ2pDRSxNQUFBQSxRQUFRLENBQUNDLE1BQVQsR0FBa0IsWUFBWUgsQ0FBQyxHQUFDLENBQWQsQ0FBbEI7QUFDSDtBQUNKOztBQUVELE1BQUlGLE1BQU0sQ0FBQ00sT0FBUCxJQUFrQixDQUF0QixFQUF5QjtBQUNyQixRQUFJRixRQUFRLENBQUNDLE1BQVQsSUFBbUIsU0FBdkIsRUFBa0M7QUFDOUJELE1BQUFBLFFBQVEsQ0FBQ0MsTUFBVCxHQUFrQixFQUFsQjtBQUVILEtBSEQsTUFHTyxJQUFJRCxRQUFRLENBQUNDLE1BQVQsSUFBbUIsV0FBV0gsQ0FBbEMsRUFBcUM7QUFDeENFLE1BQUFBLFFBQVEsQ0FBQ0MsTUFBVCxHQUFrQixZQUFZSCxDQUFDLEdBQUMsQ0FBZCxDQUFsQjtBQUNIO0FBQ0o7QUFFSixDQXRCRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9oaXN0b3J5LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zY3JvbGxIaXN0b3J5LmpzIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCAnLi9qcy9zY3JvbGxIaXN0b3J5JzsiLCJ3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgKCkgPT4ge1xuICAgIGxldCBuID0gcGFyc2VJbnQobG9jYXRpb24uc2VhcmNoWzZdKVxuXG4gICAgaWYgKHdpbmRvdy5zY3JvbGxZID09IHdpbmRvdy5zY3JvbGxNYXhZKSB7XG4gICAgICAgIGlmIChsb2NhdGlvbi5zZWFyY2ggPT0gXCJcIikge1xuICAgICAgICAgICAgbG9jYXRpb24uc2VhcmNoID0gXCI/cGFnZT0yXCJcbiAgICAgICAgfSBcblxuICAgICAgICBpZiAobG9jYXRpb24uc2VhcmNoID09IFwiP3BhZ2U9XCIgKyBuKSB7XG4gICAgICAgICAgICBsb2NhdGlvbi5zZWFyY2ggPSBcIj9wYWdlPVwiICsgKG4rMSlcbiAgICAgICAgfVxuICAgIH1cblxuICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA9PSAwKSB7XG4gICAgICAgIGlmIChsb2NhdGlvbi5zZWFyY2ggPT0gXCI/cGFnZT0xXCIpIHtcbiAgICAgICAgICAgIGxvY2F0aW9uLnNlYXJjaCA9IFwiXCJcblxuICAgICAgICB9IGVsc2UgaWYgKGxvY2F0aW9uLnNlYXJjaCA9PSBcIj9wYWdlPVwiICsgbikge1xuICAgICAgICAgICAgbG9jYXRpb24uc2VhcmNoID0gXCI/cGFnZT1cIiArIChuLTEpXG4gICAgICAgIH1cbiAgICB9XG5cbn0pIl0sIm5hbWVzIjpbIndpbmRvdyIsImFkZEV2ZW50TGlzdGVuZXIiLCJuIiwicGFyc2VJbnQiLCJsb2NhdGlvbiIsInNlYXJjaCIsInNjcm9sbFkiLCJzY3JvbGxNYXhZIl0sInNvdXJjZVJvb3QiOiIifQ==