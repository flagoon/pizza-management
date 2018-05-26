if(document.getElementById('category-pic')) {
  const picture = document.getElementById('category-pic');
  const correctPath = picture.getAttribute('src');
  const badPath = 'http://127.0.0.1:8000/img/category/remove-category-icon.jpg'
  picture.addEventListener('mouseover', () => {
    picture.setAttribute('src', badPath);
  });
  picture.addEventListener('mouseout', () => {
    picture.setAttribute('src', correctPath);
  });
  picture.addEventListener('click', () => {
    axios({
      method: 'delete',
      params: {
        id: '1'
      },
      url: 'http://localhost/categories/icon/1'
    }).then((resp) => {
      console.log(resp)
    }).catch(error => {
      console.log(error.message)
    });
  });
}