document.querySelector('#myForm').addEventListener('submit', saveBookmark);

function saveBookmark(e) {
  // prevent default form submitting
  e.preventDefault();

  // get form values
  var siteName = document.querySelector('#siteName').value;
  var siteURL = document.querySelector('#siteURL').value;
  
  if (!validateForm(siteName, siteURL)) {
    return false;
  }

  var bookmark = {
    name: siteName,
    url: siteURL
  }

  console.log(bookmark);

  // // local storage test
  // localStorage.setItem('bookmarks',JSON.stringify(bookmark));
  // console.log(JSON.parse(localStorage.getItem('bookmarks')));

  if (localStorage.getItem('bookmarks') === null) {
    var bookmarks = [];
    bookmarks.push(bookmark);
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
  } else {
    var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
    bookmarks.push(bookmark);
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
  }
  
  // Clear fields
  document.querySelector('#siteName').value = '';
  document.querySelector('#siteURL').value = '';

  fetchBookmarks();  
}

function deleteBookmark(url) {
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  for (var i=0; i<bookmarks.length; i++) {
    if (bookmarks[i].url === url) {
      bookmarks.splice(i,1);
    }
  }

  localStorage.setItem('bookmarks', JSON.stringify(bookmarks));

  fetchBookmarks();
}

function fetchBookmarks() {
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

  var bookmarksResults = document.querySelector('#bookmarksResults');

  bookmarksResults.innerHTML = '';

  var str = '<div class="card-deck text-center">';
  
  for (var i=0; i<bookmarks.length; i++) {
    var name = bookmarks[i].name;
    var url = bookmarks[i].url;

    str += '<div class="col-sm-6 col-md-4 col-lg-3">' 
        + `<div class="card mb-4 shadow-sm">`
        + `<div class="card-header"><h5 class="my-0">${name}</h5></div>`
        + `<div class="card-body" style="width: 200px">`
        + `<a class="btn btn-primary" target="_blank" href="${url}">Visit</a>`
        + ` <a onclick="deleteBookmark('${url}')" class="btn btn-danger" href="#">Delete</a>`
        + `</div></div></div>`;
  }
  str += '</div>'

  bookmarksResults.innerHTML = str;
}

function validateForm(siteName, siteURL) {
  if (!siteName || !siteURL) {
    alert('Please fill in all data fields');
    return false;
  }

  var expURL = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
  var regexURL = new RegExp(expURL);

  if (!siteURL.match(regexURL)) {
    alert('Please a valid URL');
    return false;
  }

  return true;
}