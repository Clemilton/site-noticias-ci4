import {
    swipe
} from './swipebanner.js'

async function loadHomeData() {
    var bannerHome = document.querySelector('._bannerHome');
    const dataBanner = await fetch('/banner/home', { method: 'get' });
    const bannerHtml = await dataBanner.text()
    bannerHome.innerHTML = bannerHtml
    swipe('.sliderFeaturedPosts');
    /* var recent = document.querySelector('._recent');
     var categoryCulture = document.querySelector('._category_culture')
     var categoryBusiness = document.querySelector('._category_business')
     var categoryLifestyle = document.querySelector('._category_lifestyle')
 
 
     const dataBanner = await fetch('/banner/home', { method: 'get' });
     const bannerHtml = await dataBanner.text()
     bannerHome.innerHTML = bannerHtml
     swipe('.sliderFeaturedPosts');
 
     const dataRecent = await fetch('/recent', { method: 'get' });
     const recentHtml = await dataRecent.text();
     recent.innerHTML = recentHtml
 
     var trending = document.querySelector('._trending');
     const dataTrending = await fetch('/trendings', { method: 'get' });
     const trendingHtml = await dataTrending.text();
     trending.innerHTML = trendingHtml;
 
     const dataCategoryCulture = await fetch('/category/culture', { method: 'get' });
     const categoryCultureHtml = await dataCategoryCulture.text();
     categoryCulture.innerHTML = categoryCultureHtml;
 
     const dataCategoryBusinness = await fetch('/category/business', { method: 'get' });
     const categoryBusinessHtml = await dataCategoryBusinness.text();
     categoryBusiness.innerHTML = categoryBusinessHtml;
 
     const dataCategoryLifestyle = await fetch('/category/lifestyle', { method: 'get' });
     const categoryCultureLifestyleHtml = await dataCategoryLifestyle.text();
     categoryLifestyle.innerHTML = categoryCultureLifestyleHtml;*/
}

loadHomeData();