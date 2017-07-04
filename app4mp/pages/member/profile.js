// pages/member/profile.js
//获取应用实例
var app = getApp()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    openid:'',
    title: '会员',
    sub_title: '用户资料修改：',
    userInfo: {},
    toast1Hidden: true,
    modalHidden: true,
    modalHidden2: true,
    notice_str: '',
    index: 0  
  },
  frm: null,
  toast1Change: function (e) {
    this.setData({ toast1Hidden: true });
  },
  //弹出确认框  
  modalTap: function (e) {
    this.setData({
      modalHidden: false
    })
  },
  confirm_one: function (e) {
    console.log(e);
    var that = this;
    var formData = this.frm.detail.value;
    var app = getApp();
    var url = app.globalData.rooturl + '/profile/modify'
    wx.request({
      url: url,
      data: formData,
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        console.log(res.data)
        that.setData({
          modalHidden: true,
          toast1Hidden: false,
          notice_str: '提交成功'
        });
      }
    })
    
  },
  cancel_one: function (e) {
    console.log(e);
    this.setData({
      modalHidden: true,
      toast1Hidden: false,
      notice_str: '取消成功'
    });
  },
  //弹出提示框  
  modalTap2: function (e) {
    this.setData({
      modalHidden2: false
    })
  },
  modalChange2: function (e) {
    this.setData({
      modalHidden2: true
    })
  },
  bindPickerChange: function (e) {
    console.log('picker发送选择改变，携带值为', e.detail.value)
    this.setData({
      index: e.detail.value
    })
  }, 
  formSubmit: function (e) {
    this.frm != null || (this.frm = e);
    if (e.detail.value.company.length == 0 || e.detail.value.username.length == 0 || e.detail.value.tel.length == 0) {
      app.showToast('提示：用户名,姓名，电话都不能为空！', this, 2000);
     
    } else {
      this.modalTap();
    }
    
  },
  formReset: function () {
    console.log('form发生了reset事件');
    this.modalTap2();
  },   
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    console.log('onLoad')
    var that = this
    //调用应用实例的方法获取全局数据
    app.getUserInfo(function (userInfo) {
      //更新数据
      that.setData({
        userInfo: userInfo
      })
    }) 
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
  
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
  
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
  
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
  
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
  
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
  
  }

})