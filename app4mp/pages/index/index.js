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
    refresh: false,
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
    this.setData({
      refresh: true,
      films: [],
      start: 0
    })
    
    this.reload();
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
  reload: function (e) {
    var that = this;
    var api_url = app.globalData.rooturl + '/post/api_posts_count';

    functions.fetchFilms.call(that, url, 0, pageSize, function (data) {

    })

  },
  onLoad: function () {
    var that = this
        // this.setData({
        //   showLoading: false
        // })
    this.reload();
    
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