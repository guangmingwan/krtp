//index.js
//获取应用实例
var app = getApp()
var types = ['default', 'primary', 'warn']
var pageObject = {
  data: {
    title: '供应-我要卖',
    defaultSize: 'default',
    primarySize: 'default',
    warnSize: 'default',
    disabled: false,
    plain: false,
    loading: false
  },
  setDisabled: function (e) {
    this.setData({
      disabled: !this.data.disabled
    })
  },
  setPlain: function (e) {
    this.setData({
      plain: !this.data.plain
    })
  },
  setLoading: function (e) {
    this.setData({
      loading: !this.data.loading
    })
  },
  gotoPost: function(event) {
    var postType = event.currentTarget.dataset.postType
    console.log("postType:" + postType)
    wx.navigateTo({
      url: '/pages/post/post?postType=' + postType
    })
  }
}

for (var i = 0; i < types.length; ++i) {
  (function (type) {
    pageObject[type] = function (e) {
      var key = type + 'Size'
      var changedData = {}
      changedData[key] =
        this.data[key] === 'default' ? 'mini' : 'default'
      this.setData(changedData)
    }
  })(types[i])
}

Page(pageObject)
