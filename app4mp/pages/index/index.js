//index.js
var functions = require('../functions.js')
//var url = 'https://www.17tex.com/krtp/index.php/post/api_posts'
var app = getApp();
var url = app.globalData.rooturl+'/post/api_posts'
var pageSize = 5
Page({
  data: {
    films: [],
    postcount: 0,
    hasMore: true,
    showLoading: true,
    start: 0,
    defaultSize: 'default',
    primarySize: 'default',
    warnSize: 'default',
    disabled: false,
    plain: false,
    loading: false
  },
  onPullDownRefresh: function () {
    console.log('onPullDownRefresh', new Date())
  },
  gotoSearch: function (event) {
    var searchtype = event.currentTarget.dataset.searchType
    console.log("searchtype:" + searchtype)
    wx.navigateTo({
      url: '/pages/search/search?searchtype=' + searchtype
    })
  },
  scroll: function (e) {
    //console.log(e)
  },
  onLoad: function () {
    var that = this
        // this.setData({
        //   showLoading: false
        // })
    var api_url = app.globalData.rooturl + '/post/api_posts_count';
        functions.getPostCount.call(that, api_url, function (data) {
          that.setData({
            showLoading: false
          })
        })
      functions.fetchFilms.call(that, url,  0, pageSize, function (data) {
        that.setData({
          showLoading: false
        })
      })
      
    
  },
  scrolltolower: function () {
    var that = this
    this.setData({
      hasMore: false
    })
   
    functions.fetchFilms.call(that, url, that.data.start, pageSize, function (data) {
      that.setData({
        showLoading: false
      })
    })
    // functions.getCity(function (city) {
    //   functions.fetchFilms.call(that, url, city, that.data.start, pageSize, function (data) { })
    // })
  },
  viewDetail: function (e) {
    var ds = e.currentTarget.dataset;
    wx.navigateTo({
      url: '../detail/detail?id=' + ds.id + '&title=' + ds.title + '&type=ing'
    })
  }
})