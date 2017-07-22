Page({
  data: {
    film: {},
    showLoading: true,
    options: null, 
  },
  onLoad: function (options) {
    var that = this
    wx.setNavigationBarTitle({
      title: options.title
    })
    var app = getApp();
    var url = app.globalData.rooturl + '/post/load/id/' + options.id
    wx.request({
      url,
      header: {
        'content-type': 'json'
      },
      success: function (res) {
        var code = res.data.code;
        if (code == "200") {
          var data = res.data.post
          if(data.face_pic == "") {
            data.face_pic = "images/logo.png";
          }
          that.setData({
            film: data,
            showLoading: false
          })
        }
        var post_title = (that.data.film.post_type == "0" ? "原料" : "余坯")
        wx.setNavigationBarTitle({
          title: post_title
        })
      }
    })
  }
})
