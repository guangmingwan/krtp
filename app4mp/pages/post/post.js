//index.js
//获取应用实例
var app = getApp()
var types = ['default', 'primary', 'warn']
var pageObject = {
  data: {
    title: '查找纺织原料',
    sub_title: '录入发布资料信息：',
    defaultSize: 'default',
    primarySize: 'default',
    warnSize: 'default',
    disabled: false,
    plain: false,
    loading: false,
    postType: 0,
    userInfo: null,
    companyInfo: null,
  },
  setDisabled: function (e) {
    this.setData({
      disabled: e
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
      postType: options.postType
    })
    switch (options.postType) {
      case "0":
        pageObject.data.title = "发布纺织原料";
        break;
      case "1":
        pageObject.data.title = "发布余胚";
        break;
    }
    wx.setNavigationBarTitle({
      title: pageObject.data.title
    })
    var that = this
    this.setDisabled(false);
    //调用应用实例的方法获取全局数据
    app.getUserInfo(function (_userInfo) {
      //更新数据
      that.setData({
        userInfo: _userInfo
      })
      app.getCompanyInfo(function (_companyInfo) {
        //更新数据
        that.setData({
          companyInfo: _companyInfo
        })
        that.setDisabled(false);
      })
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
