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
    loading: false,
    userInfo: null,
    companyInfo: null,
    modalHidden: true,
    show: false,
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
  gotoPost: function(event) {
    if (this.data.companyInfo == null) {
      this.showModal();
      return;
    }
    var postType = event.currentTarget.dataset.postType
    console.log("postType:" + postType)
    wx.navigateTo({
      url: '/pages/post/post?postType=' + postType
    })
  },
  showModal: function () {
    this.setData({
      modalHidden: !this.data.modalHidden
    })
  },
  modalBindaconfirm: function () {
    this.setData({
      modalHidden: !this.data.modalHidden,
      show: !this.data.show,
      buttonDisabled: !this.data.buttonDisabled
    })
    wx.navigateTo({
      url: '/pages/member/profile'
    })
  },
  modalBindcancel: function () {
    this.setData({
      modalHidden: !this.data.modalHidden,
    })
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.setDisabled( true );
    console.log('onLoad')
    var that = this
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
        that.setDisabled( false );
      })
    })
  },
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
