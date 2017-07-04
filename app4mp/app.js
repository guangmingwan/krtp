//app.js
App({
  onLaunch: function () {
    //调用API从本地缓存中获取数据
    var logs = wx.getStorageSync('logs') || []
    logs.unshift(Date.now())
    wx.setStorageSync('logs', logs)
  },
  getUserInfo:function(cb){
    var that = this
    if(this.globalData.userInfo){
      typeof cb == "function" && cb(this.globalData.userInfo)
    }else{
      //调用登录接口
      wx.login({
        success: function (loginCode) {
          wx.getUserInfo({
            success: function (res) {
              that.globalData.userInfo = res.userInfo
              //调用request请求api转换登录凭证  
              wx.request({
                url: 'https://api.weixin.qq.com/sns/jscode2session?appid=' + that.globalData.appid + '&secret=' + that.globalData.secret + '&grant_type=authorization_code&js_code=' + loginCode.code,
                header: {
                  'content-type': 'application/json'
                },
                success: function (res) {
                  console.log(res.data.openid) //获取openid
                  that.globalData.userInfo.openid = res.data.openid
                  typeof cb == "function" && cb(that.globalData.userInfo)
                }
              })
              
            }
          })
          
        }
      })

    }
  },
  globalData:{
    userInfo:null,
    appid: 'wxa4712ca802cf8f2a',//填写微信小程序appid  
    secret: 'c9cf9130c42c586184b8cd9f2e62caae',//填写微信小程序secret
    rooturl: 'http://127.0.0.1:8888/index.php', 
    //rooturl: 'https://www.17tex.com/krtp/index.php',
  },
  //自定义Toast   
  showToast: function(text,o,count){
         var _this = o;     
         count = parseInt(count) ? parseInt(count) : 3000;
              _this.setData({       
                toastText:text,       
                isShowToast: true,     
                });     
                setTimeout(function () {
                         _this.setData({
                                    isShowToast: false       
                                    });     
                                    },count);   
  }, 
})