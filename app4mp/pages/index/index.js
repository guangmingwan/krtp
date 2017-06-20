//index.js
var functions = require('../functions.js')
var url = 'https://www.17tex.com/krtp/index.php/post/api_posts'
var pageSize = 20
Page({
  data: {
    films: [],
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
      url: '/pages/index/search/search?searchtype=' + searchtype
    })
  },
  scroll: function (e) {
    //console.log(e)
  },
  onLoad: function () {
    var that = this
        this.setData({
          showLoading: false
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