//index.js
//获取应用实例
var app = getApp()
var types = ['default', 'primary', 'warn']
var pageObject = {
  data: {
    title: '查找纺织原料',
    sub_title: '录入查找条件：',
    defaultSize: 'default',
    primarySize: 'default',
    warnSize: 'default',
    disabled: false,
    plain: false,
    loading: false,
    searchtype: 0,
    searchData: { "zhi_number": "1", "ingredients": "2", "color": "3", "color_number": "4", "method": "5", "weight": "6"}
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
  onLoad: function (options) {
    this.setData({
      searchtype: options.searchtype
    })
    switch (options.searchtype) {
      case "0":
        pageObject.data.title = "查找纺织原料";
        break;
      case "1":
        pageObject.data.title = "查找余胚";
        break;
    }
    wx.setNavigationBarTitle({
      title: pageObject.data.title
    })
  },
  reset: function(e) {
    this.data.searchData = { "zhi_number": "", "ingredients": "", "color": "", "color_number": "", "method": "", "weight": "" }
  },
  search: function (e) {
    var that = this;
    var app = getApp();
    var url = app.globalData.rooturl + '/post/search'
    this.setLoading();
    wx.request({
      url: url,
      data: this.data.searchData,
      method: 'get',
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        console.log(res.data)
        if (res.data.code == 200) {
          that.setData({
            loading: false,
          })
          if(res.data.posts.length >0) {
            wx.navigateTo({
              url: '/pages/index/search/result',
            })
          }
        }
        else {
          that.setData({
            loading: false,
            modalHidden: true,
            toast1Hidden: false,
            notice_str: "没有找到记录",
          });
        }
      }
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
