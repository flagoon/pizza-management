if(document.getElementById('category-pic')) {
  const origin = window.location.origin;
  const picture = document.getElementById('category-pic');
  const correctPath = picture.getAttribute('src');
  const badPath = `${origin}/storage/remove-category-icon.jpg`;

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